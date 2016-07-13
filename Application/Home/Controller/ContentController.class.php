<?php
namespace Home\Controller;
use Think\Controller;
class ContentController extends Controller {
	public function message($id){
		$content = M('aft_message_content');
		$data['id'] = $id;
		$result = $content->where($data)->select();
		$this->assign('message',$result[0]);
		$this->display();
	}
	public function diary($p=0){
        $content = M('aft_message_content');
        $result = $content->where($id)->select();
        $devide = R('Content/devide',array($result,$p));
        $this->assign("content",$devide['new']);
        $this->assign("num",$devide['page']['num']);
        $this->assign("npage",$devide['page']['p']);
        $this->display('Content/diary');
     }
     //分页功能
     public function devide($result,$p){
        $limit_table = M('aft_page_limit');
        $limit_l = $limit_table->where('id=1')->select();
        $limit = $limit_l[0]['limit'];
        $num = count($result);
        $split = array_chunk($result, $limit);
        $page = count($split);
        if ($page == 1) {
            foreach ($split[0] as $key => $value) {
                $data['title'] = $value['title'];
                $data['content'] = $value['content'];
                $data['time'] = date('Y-m-d',$value['createtime']);
                $data['id'] = $value['id'];
                $data['content_part'] = $value['content_part'];
                $data['author'] = $value['author'];
                $data['img'] = $value['img'];
                $new[] = $data;
            }
           $pdata['new'] = $new; 
        }else {
            foreach ($split as $key => $value) {
                $epage[$key+1] = $value;
            }
            if ($p == 0){
                foreach ($epage[1] as $k => $v) {
                    $data['title'] = $v['title'];
                    $data['content'] = $v['content'];
                    $data['time'] = date('Y-m-d',$v['createtime']);
                    $data['id'] = $v['id'];
                    $data['content_part'] = $v['content_part'];
                    $data['author'] = $vv['author'];
                    $data['img'] = $v['img'];
                    $new[] = $data;
                }
            }
            else {
                foreach ($epage[$p] as $k => $v) {
                    $data['title'] = $v['title'];
                    $data['content'] = $v['content'];
                    $data['time'] = date('Y-m-d',$v['createtime']);
                    $data['id'] = $v['id'];
                    $data['content_part'] = $v['content_part'];
                    $data['author'] = $vv['author'];
                    $data['img'] = $v['img'];
                    $data['img'] = "../../".$v['img'];
                    $new[] = $data;
                }
            }
            $pdata['page']['num'] = $page;
            $pdata['page']['p'] = $p;
            $pdata['new'] = $new;
        }
        return $pdata;
     }
     public function aboutme(){
        $this->display();
     }
}