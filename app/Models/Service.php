<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{

    use HasFactory;
    protected $fillable  = ["title", "description"];


    /**
     * @var array|\Illuminate\Contracts\Foundation\Application|\Illuminate\Http\Request|mixed|string|null
     */
    private $title;
    /**
     * @var array|\Illuminate\Contracts\Foundation\Application|\Illuminate\Http\Request|mixed|string|null
     */
    private $description;

    /**
     * @return array|\Illuminate\Contracts\Foundation\Application|\Illuminate\Http\Request|mixed|string|null
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param array|\Illuminate\Contracts\Foundation\Application|\Illuminate\Http\Request|mixed|string|null $title
     */
    public function setTitle($title): void
    {
        $this->title = $title;
    }

    /**
     * @return array|\Illuminate\Contracts\Foundation\Application|\Illuminate\Http\Request|mixed|string|null
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param array|\Illuminate\Contracts\Foundation\Application|\Illuminate\Http\Request|mixed|string|null $description
     */
    public function setDescription($description): void
    {
        $this->description = $description;
    }



}
