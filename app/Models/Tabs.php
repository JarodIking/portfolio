<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tabs extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id',
        'name',
        'deleted',
        'updated',
    ];

    public function getContentsPerTab(Content $content, Social $social, Listitem $listitem, int $tabId)
    {
        $data['contents'] = $content->where('tabs', $tabId)->get();

        foreach ($data['contents'] as $key => $value) {
            $data['contents'][$key]['socials'] = $social->where('contents', $value->id)
                ->join('icons', 'icons.id', '=', 'socials.icon')
                ->select('icons.icon_html', 'socials.id', 'socials.social')
                ->get();

            $data['contents'][$key]['list'] = $listitem->where('contents', $value->id)
                ->join('icons', 'icons.id', '=', 'listitems.icon')
                ->select('icons.icon_html', 'listitems.id', 'listitems.text')
                ->get();
        }

        return $data;
    }

}
