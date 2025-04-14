<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Str;
use Laravel\Cashier\Billable;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable, SoftDeletes, HasRoles, Billable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'can_set_password',
        'google_id',
        'github_id',
        'avatar',
    ];
    public function registeredWithGoogle(): bool
    {
        return !is_null($this->google_id);
    }
    public function registeredWithGithub(): bool
    {
        return !is_null($this->github_id);
    }

    public function orders()
    {
        return $this->hasMany(\App\Models\Order::class, 'client_id');
    }
    public function hasPlan(string $planSlug): bool
    {
        $subscription = $this->subscription('default');

        if (! $subscription || ! $subscription->valid()) {
            return false;
        }

        $plan = \App\Models\Plan::where('stripe_price_id', $subscription->stripe_price)->first();

        return $plan && $plan->slug === $planSlug;
    }

    public function currentPlan()
    {
        $subscription = $this->subscription('default');

        if (! $subscription || ! $subscription->valid()) {
            return null;
        }

        return \App\Models\Plan::where('stripe_price_id', $subscription->stripe_price)->first();
    }

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
            'can_set_password' => 'boolean',
        ];
    }

    /**
     * Get the user's initials
     */
    public function initials(): string
    {
        return Str::of($this->name)
            ->explode(' ')
            ->map(fn (string $name) => Str::of($name)->substr(0, 1))
            ->implode('');
    }
}
