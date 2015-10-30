<?php
 
defined('SYSPATH') or die('No direct script access.');
 
class Model_News extends Model {
 
 	public $tbl_name = "cns_news";
 
    public function all_posts() {
        $query = DB::query(Database::SELECT, 'SELECT * FROM '.$this->tbl_name);
        $news = $query->execute();
        return $news;
    }
    /**сохранить новый пост*/
    public function saveNewPost($post){
    	$fields = array_keys($post);
   		$query = DB::insert($this->tbl_name, $fields)->values($post);
		return $query->execute();
    }
    
    /**апдейтить пост**/
    public function savePost($id, $post){

		$query = DB::update($this->tbl_name)->set($post)->where('id', '=', $id);
		return $query->execute();
    }
    /**Апдейт отдельного поля записи**/
	public function setField($field, $data, $id){
		
		$query = DB::update($this->tbl_name)->set(array($field=>$data))->where('id', '=', $id);
		return $query->execute();
		
	}
 	/**вывести один пост**/
 	public function showPost($id){
 		$query = DB::select()->from($this->tbl_name)->where('id', '=', $id);
 
 		return $query->execute()->as_array();
 	}
 	/**удаление списка записей**/
 	public function del_id($id){
 		
 		$query = DB::delete($this->tbl_name)->where('id', '=', $id);
		return $query->execute();
 	}
 	/**удаление списка записей
 	 * $ids - массив номеров записей**/
 	public function del_ids($ids){
 		
 		$query = DB::delete($this->tbl_name)->where('id', 'IN', $ids);
		return $query->execute();
 	}
}

