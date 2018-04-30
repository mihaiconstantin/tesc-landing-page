<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PeopleSection extends Model
{
    /**
     * Query scope for filtering only results that available for display.
     *
     * @param $query
     * @return mixed
     */
    public function scopeDisplay($query)
    {
        return $query->where('display', 1);
	}



    /**
     * Query scope for gender (i.e., male or female).
     *
     * @param $query
     * @param $gender
     * @return mixed
     */
    public function scopeOfGender($query, $gender)
    {
        return $query->where('gender', '=', $gender);
    }



    /**
     * Query scope for role column (i.e., founder or employee).
     *
     * @param $query
     * @param $role
     * @return mixed
     */
    public function scopeOfRole($query, $role)
    {
	    return $query->where('role', $role);
    }



    /**
     * Data used on the landing page.
     *
     * @param int $howMany
     * @param array $columns
     * @return mixed
     */
    public static function forLandingPage($howMany = 3, $columns = ['id', 'name', 'description', 'link', 'image', 'role', 'order'])
    {
        $founders = static::select($columns)->ofRole('founder')->display()->orderBy('order', 'asc')->get();
        $females = static::select($columns)->ofGender('female')->ofRole('employee')->display()->take($howMany)->inRandomOrder()->orderBy('order', 'asc')->get();
        $males = static::select($columns)->ofGender('male')->ofRole('employee')->display()->take($howMany)->inRandomOrder()->orderBy('order', 'asc')->get();
        $employees = $females->merge($males)->shuffle();
        return $founders->merge($employees);
    }



    /**
     * Get all people in the `people_sections` table available for display.
     *
     * @param array $columns
     * @return mixed
     */
    public static function activeMembers($columns = ['id', 'name', 'description', 'link', 'image', 'role', 'order'])
    {
        return static::select($columns)->display()->orderBy('order', 'asc')->get();
    }

}
