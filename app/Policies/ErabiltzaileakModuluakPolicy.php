<?php

namespace App\Policies;

use App\Models\User;
use App\Models\erabiltzaileak_moduluak;
use Illuminate\Auth\Access\Response;

class ErabiltzaileakModuluakPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return false;
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, erabiltzaileak_moduluak $erabiltzaileakModuluak): bool
    {
        return false;
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return false;
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, erabiltzaileak_moduluak $erabiltzaileakModuluak): bool
    {
        return false;
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, erabiltzaileak_moduluak $erabiltzaileakModuluak): bool
    {
        return false;
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, erabiltzaileak_moduluak $erabiltzaileakModuluak): bool
    {
        return false;
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, erabiltzaileak_moduluak $erabiltzaileakModuluak): bool
    {
        return false;
    }
}
