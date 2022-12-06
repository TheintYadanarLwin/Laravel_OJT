<?php

namespace App\Exports;

use App\Models\Post;
use App\Models\Category;



use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class PostsExport implements FromCollection,WithHeadings,WithMapping
{
    use Exportable;
    public function headings(): array {
        return [
           "Title","Description","Status","category","Updated At","Created At"
        ];
      }
    
    public function map($post): array
    {
    
         return[
             $post->title,
             $post->description,
             $post->status,
             $post->categories->name,
             $post->updated_at->toDatestring(),
             $post->created_at->toDatestring(),

         ];
    }

    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Post::with('categories')->get()->toArray();
       
    }
    

    
}