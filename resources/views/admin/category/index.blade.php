@extends('admin.layouts.master')
@section('content')
<div class="box span12">
    <div class="box-header" data-original-title>
        <h2><span class="break"></span>All Categories</h2>

        <div class="box-icon">
            <a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
            <a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
            <a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
        </div>
    </div>
    <div class="box-content">
        <table class="table table-striped table-bordered bootstrap-datatable datatable">
            <thead>
             <div style="float: right">
                 <span class="alert-success align-right">
                <?php
                     $massage = Session::get('massage');
                     if($massage){
                         echo $massage;
                         Session::Flush();
                     }
                ?>
             </span>
             </div>
            <tr>
                <th>SL</th>
                <th>Category Name</th>
                <th>Description</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            <?php $count=1?></php>
            @foreach($AllCategory as $category)
            <tr>
                <td><?php echo $count++ ?></td>
                <td class="center">{{ $category->name }}</td>
                <td class="center">{{ Str::limit($category->description, 40) }}</td>
                <td class="center">
                    @if($category->status == 1)
                        <span class="label label-success">Active</span>
                    @else
                        <span class="label btn-danger">Unactive</span>
                    @endif
                </td>
                <td class="center">
                    @if($category->status == 1)
                    <a class="btn btn-danger" href="{{Route('status.unactive',$category->id)}}">
                        <i class="halflings-icon white thumbs-down"></i>
                    </a>
                    @else
                        <a class="btn btn-success" href="{{Route('status.active',$category->id)}}">
                            <i class="halflings-icon white thumbs-up"></i>
                        </a>
                    @endif
                    <a class="btn btn-info" href="{{Route('category.edit',$category->id)}}">
                        <i class="halflings-icon white edit"></i>
                    </a>
                    <a class="btn btn-danger" href="{{Route('category.delete',$category->id)}}" id="delete">
                        <i class="halflings-icon white trash"></i>
                    </a>
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div><!--/span-->
@endsection
