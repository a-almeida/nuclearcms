<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Pages_model extends CI_Model
{

	public function get_table()
	{
		$this->db->select('*');
		$query2 = $this->db->get('pages')->result();
		$table['results']=$query2;
		return $table;
	}
	

	public function delete($slug,$post)
	{
	
		$this->db->where('articlesSLUG', $slug);
		$this->db->where('articlesID', $post['delete']);
		$this->db->delete('articles');
		return TRUE;
	}
	public function get_content($slug)
	{
		
		
		$this->db->select('*');
		$this->db->where('articlesSLUG',$slug);
		$query = $this->db->get('pages')->row();
		return $query;
	}
	
	
	
	public function upload($slug,$post,$param='')
	{
		
		
		if($slug!='home'   ){
			$data['articlesSLUG']= strtolower(url_title(
					str_replace('ã','a',
					str_replace('á','a',
					str_replace('é','e',
					str_replace('í','i',
					str_replace('ó','o',
					str_replace('õ','o',
					str_replace('ç','c',
					str_replace('ú','u',$post['title']))))))))
					));
			
		}
		
	
			if(isset($post['title']))
			{
				$data['articlesTITLE']= $post['title'];
			}
			if(isset($post['descrit']))
			{
				$data['articlesSUBTITLE']= $post['descrit'];
			}
			
			if(isset($post['image']))
			{
				$data['articlesIMG']= $post['image'];
			}
			
			if(isset($post['text']))
			{
				$data['articlesTEXT']= $post['text'];
			}
		$this->db->where('articlesSLUG', $slug);
		$this->db->update('pages', $data);
		
		return TRUE;
	}
			
	public function create($post)
	{
		$data=array();
		$data['articlesNAME']= $post['title'];
		$data['articlesSLUG']= url_title($post['title']);
		
		foreach($confs as $key=>$conf)
		{
			if($conf=='title')
			{
				$data['articlesTITLE']= $post['title'];
			}
			if($conf=='subtitle')
			{
				$data['articlesSUBTITLE']= $post['descrit'];
			}
			
			if($conf=='img')
			{
				$data['articlesIMG']= $post['image'];
			}
			if($conf=='text')
			{
				$data['articlesTEXT']= $post['text'];
			}
		}	
		$this->db->insert('pages', $data);
		return TRUE;
	}
}