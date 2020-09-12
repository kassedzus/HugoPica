@extends('layouts.app')
 
@section('title', 'Cart')
 
@section('content')

<?php $total = 0 ?>


@if(session('cart'))
<table id="cart" class="table table-hover table-condensed">
    <thead>
    <tr>
        <th style="width:50%">Pica</th>
        <th style="width:10%">Cena</th>
        <th style="width:8%">Daudzums</th>
        <th style="width:22%" class="text-center">Summa</th>
        <th style="width:10%"></th>
    </tr>
    </thead>
    <tbody>

    <?php $total = 0 ?>
        @foreach(session('cart') as $id => $details)

            <?php $total += $details['price'] * $details['quantity'] ?>

            <tr>
                <td data-th="Pica">
                    <div class="row">
                        <div class="col-sm-3 hidden-xs"><img src="{{ $details['avatar'] }}" width="100" height="100" class="img-responsive"/></div>
                        <div class="col-sm-9">
                            <h4 class="nomargin">{{ $details['name'] }}</h4>
                        </div>
                    </div>
                </td>
                <td data-th="Cena">${{ $details['price'] }}</td>
                <td data-th="Daudzums">
                    <input type="number" value="{{ $details['quantity'] }}" class="form-control quantity" />
                </td>
                <td data-th="Kopā" class="text-center">${{ $details['price'] * $details['quantity'] }}</td>
                <td class="actions flex" data-th="">
                    <button class="btn btn-info btn-sm update-cart mr-2" data-id="{{ $id }}"><i class="fas fa-sync-alt"></i></button>
                    <button class="btn btn-danger btn-sm remove-from-cart" data-id="{{ $id }}"><i class="far fa-trash-alt"></i></button>
                </td>
            </tr>
        @endforeach
    </tbody>
    <tfoot>
    {{-- <tr class="visible-xs">
        <td class="text-center"><strong>Kopā: {{ $total }}</strong></td>
    </tr> --}}
    <tr>
        <td><a href="{{ url('/picas') }}" class="btn btn-warning"><i class="fa fa-angle-left"></i> Turpināt iepirkties</a></td>
        <td colspan="2" class="hidden-xs"></td>
        <td class="hidden-xs text-center"><strong>Kopā: {{ $total }}</strong></td>
    </tr>
    </tfoot>
</table>
@else

<div class="text-center p-20 bg-gray-100 shadow bg-opacity-50 rounded-lg">Iepirkumu grozs ir tukšs</div>

@endif

      
 
@endsection