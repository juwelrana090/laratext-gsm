<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\DB;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;


class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable,HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'phone',
        'image',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public static function getPermissionGroups()
    {
        $permissionsGroups = DB::table('permissions')->select('group_name')->groupBy('group_name')->get();
        return $permissionsGroups;
    }

    public static function getPermissionGroupsName($group_name)
    {
        $permissionsGroupsName = DB::table('permissions')->where('group_name',$group_name)->get();
        return $permissionsGroupsName;
    }

    public static function roleHasPermission($singleRole,$permissions)
    {
        $hasPermission =true;
        foreach($permissions as $permission){
            if(!$singleRole->hasPermissionTo($permission->name)){
                $hasPermission =false;
                return $hasPermission;
            }
        }

       return $hasPermission;
    }

}
