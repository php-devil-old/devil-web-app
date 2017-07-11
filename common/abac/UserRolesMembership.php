<?php
namespace common\abac;

class UserRolesMembership
{
    public static function isAdmin()
    {
        if (\Devil::app()->user->getIdenity()) {
            return \Devil::app()->user->getIdenity()->isAdmin();
        } else {
            return false;
        }
    }

    public static function isEditor()
    {
        if (\Devil::app()->user->getIdenity()) {
            return \Devil::app()->user->getIdenity()->isEditor();
        } else {
            return false;
        }
    }
}