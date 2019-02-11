<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * 服务配置模板
 *
 * Date: 2019-02-11
 * @author George
 * @package App\Models
 * @mixin \Eloquent
 */
class Template extends Model
{
    use SoftDeletes;

    /**
     * 禁用自增ID
     *
     * @var bool $incrementing
     * Date: 2019-02-11
     * @author George
     */
    public $incrementing = false;

    /**
     * 定义不可填充字段
     *
     * @var array $guarded
     * Date: 2019-02-11
     * @author George
     */
    protected $fillable = ['id', 'service', 'string', 'extension'];

    /**
     * 定义模型属性类型
     *
     * @var array $casts
     * Date: 2019-02-11
     * @author George
     */
    protected $casts = [
        'options' => 'json'
    ];
}
