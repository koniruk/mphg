<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Location;
use App\Models\PublicStatus;
use App\Models\Size;
use App\Models\Work;
use App\Models\WorkImage;
use App\Models\World;
use Illuminate\Http\Request;


class WorkController extends Controller
{
    /**
     * WorkController constructor.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /** 作品一覧画面
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $works = Work::all();
        return view('admin.works.index',['works' => $works]);
    }

    /** 作品登録画面
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        $world = new World();
        $location = new Location();
        $size = new Size();
        $publicStatus = new PublicStatus();
        $worlds = $world->getWorldLists();
        $locations = $location->getLocationLists();
        $sizes = $size->getSizeLists();
        $public_status = $publicStatus->getPublicStatusList();

        return view('admin.works.edit',[
            'worlds' => $worlds,
            'locations' => $locations,
            'sizes' => $sizes,
            'public_status' => $public_status,
            'work' => null,
        ]);
    }

    /** 作品登録処理
     *
     */
    public function register(Request $request)
    {
        $work = new Work();
        $work->name = $request->name;
        $work->world_id = $request->world;
        $work->location_id = $request->location;
        $work->size_id = $request->size;
        $work->access = $request->access;
        $work->public_status_id = $request->public_status;
        $work->save();

        foreach ($request->item['images_attributes'] as $item) {
            foreach ($item as $key => $value) {
                $workImage = new WorkImage();
                $workImage->work_id = $work->id;
                $workImage->image = $value;
                $workImage->save();
            }
        }

        return redirect(route('admin.work'))->with('flash_message','作品登録が完了しました');
    }

    public function edit($id)
    {
        $world = new World();
        $location = new Location();
        $size = new Size();
        $publicStatus = new PublicStatus();
        $worlds = $world->getWorldLists();
        $locations = $location->getLocationLists();
        $sizes = $size->getSizeLists();
        $public_status = $publicStatus->getPublicStatusList();

        $work = Work::find($id);

        return view('admin.works.edit',[
            'worlds' => $worlds,
            'locations' => $locations,
            'sizes' => $sizes,
            'public_status' => $public_status,
            'work' => $work,
        ]);
    }

    public function update()
    {
        //
    }
}
