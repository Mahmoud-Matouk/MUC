<?php

namespace App\Models;

use App\Enums\Role;
use Filament\Panel;

trait UserAccess
{
    public function canAccessPanel(Panel $panel): bool
    {
        if ($panel->getId() === 'admin') {
            return $this->isSuper() || $this->hasAnyRole(Role::getAdminPanelRoles());
        }

        return true;
    }

    public function canImpersonate(): bool
    {
        return $this->isSuper();
    }

    public function isAdmin(): bool
    {
        return $this->hasRole(Role::Admin);
    }

    public function isAgent(): bool
    {
        return $this->hasRole(Role::Agent);
    }

    public function isEditor(): bool
    {
        return $this->hasRole(Role::Editor);
    }

    public function isAuthor(): bool
    {
        return $this->hasRole(Role::Author);
    }

    public function canAccessUsers(): bool
    {
        return $this->isSuper() || $this->isAdmin();
    }

    public function canAccessGeo(): bool
    {
        return false;
        // return $this->isSuper() || $this->isAdmin();
    }

    public function canAccessBranches(): bool
    {
        return false;
    }

    public function canAccessLeads(): bool
    {
        return false;
        // return $this->isSuper() || $this->isAdmin() || $this->isAgent();
    }

    public function canAccessPosts(): bool
    {
        return $this->isSuper() || $this->isAdmin() || $this->isEditor() || $this->isAuthor();
    }
}
