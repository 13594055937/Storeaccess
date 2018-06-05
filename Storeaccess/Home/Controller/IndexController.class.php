<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index()
    {
        if(IS_AJAX && IS_GET){
            $id=$_GET['id'];
            $sanfanguser = M('Tao_zdb_sanfanguser');
            if(!preg_match('/^\d+$/',$id)) {
                $this->ajaxReturn(['msg' => '参数错误。','status' => false]);
            }else{
                $list = $sanfanguser->field('shop_name,update_time,expires_time,auto_syn_tpmall_ship,auto_confirm,grab_jd_fbp_order,api_app_path,auto_crawl_order')->where("type=%d", $id)->find();
                $list = [
                    'dianming' => $list['shop_name'],
                    'genxin_time' => $list['update_time'],
                    'shouquandaoqi_time' => $list['expires_time'],
                    'tongbuchuku' => $list['auto_syn_tpmall_ship'],
                    'rukudingdanzhuaqu' => $list['grab_jd_fbp_order'],
                    'zidongjiedan' => $list['auto_crawl_order'],
                    'tuisongdizhi' => $list['api_app_path']
                ];
                $this->ajaxReturn(['data' => $list,'status' => true]);
            }
        }
        $this->display();
    }
//    public function statsu()
//    {
//        $data = I('param.');
//        $sanfanguser = M('tao_zdb_sanfanguser');
//        $sanfanguser->where("id=%d and username='%s' and xx='%f'",array($id,$username,$xx))->select();
//
//
//    }

}