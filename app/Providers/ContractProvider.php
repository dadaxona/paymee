<?php

namespace App\Providers;

class ContractProvider
{
 
    protected $work;
 
    public function getlist($config)
    {       
        return $this->work->select($config['columns'])->with($config['relations'])->paginate(20);
    } 
    
    public function get()
    {        
       return  $this->work->get();      
    }

    public function create($request)
    {
        return $this->work->create($request);    
    }
    
    public function show($id)
    {
        return $this->work->find($id);
    }

    public function edit($id)
    {
        return $this->work->find($id);
    }
    
    public function update($request)
    {        
        return $this->work->find($request['id'])->update($request);
    }

    public function delete($id)
    {    
        return $this->work->find($id)->delete($id);
    }
}
