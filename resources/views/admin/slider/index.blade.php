@extends('admin.layouts.master')
@section('content')
    <div class="box span12">
        <div class="box-header" data-original-title>
            <h2><span class="break"></span>All Sliders</h2>
            <span style="float: right"><a href="{{route('slider.add')}}" class="btn-success">Add Slider</a></span>
        </div>
        <div class="box-content">
            <table class="table">
                <thead>
                <div style="float: right">
                 <span class="alert-success align-right">
                <?php
                     $massage = Session::get('massage');
                     if($massage){
                         echo $massage;
                         Session::forget('massage');
                     }
                     ?>
             </span>
                </div>
                <tr>
                    <th>SL</th>
                    <th>Name</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <?php $count=1?></php>
                @foreach($sliderItem as $dataItem)
                    <tr>
                        <td><?php echo $count++ ?></td>
                        <td class="center">{{ ucfirst($dataItem->name) }}</td>
                        <td class="center"><img src="{{asset('images/products/'.$dataItem->image)}}" width="50" height="90"></td>
                        <td class="center">{{ $dataItem->status }}</td>
                        <td class="center">
                            @if($dataItem->status == 1)
                                <span class="label label-success">Active</span>
                            @else
                                <span class="label btn-danger">Unactive</span>
                            @endif
                        </td>
                        <td class="center">
                            @if($dataItem->status == 1)
                                <a class="btn btn-danger" href="{{Route('slider.status.unactive',$dataItem->id)}}">
                                    <i class="halflings-icon white thumbs-down"></i>
                                </a>
                            @else
                                <a class="btn btn-success" href="{{Route('slider.status.active',$dataItem->id)}}">
                                    <i class="halflings-icon white thumbs-up"></i>
                                </a>
                            @endif
                            <a class="btn btn-info" href="{{Route('slider.edit',$dataItem->id)}}">
                                <i class="halflings-icon white edit"></i>
                            </a>
                            <a class="btn btn-danger" href="{{Route('slider.delete',$dataItem->id)}}" id="delete">
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
