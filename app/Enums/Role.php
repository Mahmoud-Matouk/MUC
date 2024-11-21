<?php

namespace App\Enums;

enum Role: string
{
    case Admin = 'admin';
    case Agent = 'agent';
    case Editor = 'editor';
    case Author = 'author';

    public function label(): string
    {
        return match ($this) {
            self::Admin => __('user.roles.admin'),
            self::Agent => __('user.roles.agent'),
            self::Editor => __('user.roles.editor'),
            self::Author => __('user.roles.author'),
        };
    }

    public function description(): string
    {
        return match ($this) {
            self::Admin => __('user.roles.admin_description'),
            self::Agent => __('user.roles.agent_description'),
            self::Editor => __('user.roles.editor_description'),
            self::Author => __('user.roles.author_description'),
        };
    }

    public static function getAdminPanelRoles(): array
    {
        return [
            self::Admin,
            self::Agent,
            self::Editor,
            self::Author,
        ];
    }
}
