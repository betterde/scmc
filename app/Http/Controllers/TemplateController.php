<?php

namespace App\Http\Controllers;

use Ramsey\Uuid\Uuid;
use App\Models\Template;
use Illuminate\Http\Request;

/**
 * 服务配置模板逻辑控制器
 *
 * Date: 2019-02-11
 * @author George
 * @package App\Http\Controllers
 */
class TemplateController extends Controller
{
    /**
     * 获取所有模板信息
     *
     * Date: 2019-02-11
     * @author George
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function index(Request $request)
    {
        $query = Template::query();

        if ($service = $request->get('service')) {
            $query->where('service', 'like', "%$service%");
        }

        $templates = $query->paginate($request->get('paginate'));

        return success($templates);
    }

    /**
     * 创建服务配置模板
     *
     * Date: 2019-02-11
     * @author George
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     * @throws \Illuminate\Validation\ValidationException|\Exception
     */
    public function store(Request $request)
    {
        $attributes = $this->validate($request, [
            'service' => 'required',
            'string' => 'required',
            'extension' => 'nullable'
        ]);

        $attributes['id'] = Uuid::uuid4();

        $template = Template::create($attributes);
        return stored($template);
    }

    /**
     * 获取服务配置模板详情
     *
     * Date: 2019-02-11
     * @author George
     * @param Template $template
     * @return \Illuminate\Http\JsonResponse
     */
    public function show(Template $template)
    {
        return success($template);
    }

    /**
     * 更新服务配置模板
     *
     * Date: 2019-02-11
     * @author George
     * @param Request $request
     * @param Template $template
     * @return \Illuminate\Http\JsonResponse
     * @throws \Illuminate\Validation\ValidationException
     */
    public function update(Request $request, Template $template)
    {
        $attributes = $this->validate($request, [
            'service' => 'required',
            'string' => 'required',
            'extension' => 'nullable'
        ]);

        $template->update($attributes);

        return updated($template);
    }

    /**
     * 删除服务配置模板
     *
     * Date: 2019-02-11
     * @author George
     * @param Template $template
     * @return \Illuminate\Http\JsonResponse
     * @throws \Exception
     */
    public function destroy(Template $template)
    {
        $template->delete();
        return deleted();
    }
}
