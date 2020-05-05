<?php


namespace Toolek\ViewPage\Model;


use App\User;
use Illuminate\Database\Eloquent\Model;

class ViewPage extends Model
{
    protected $table = 'viewPages';
    protected $fillable = [
        'ip',
        'country',
        'user_id',
        'city',
        'platform',
        'browser',
        'viewable_id',
        'viewable_type',
    ];
    public function viewable()
    {
        return $this->morphTo();
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
}
