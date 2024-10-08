@extends('admin.main')


@section('content')
    <table class="table">
        <thead>
            <tr>
                <th style="width: 50px">ID</th>
                <th>Customer name </th>
                <th>Phone number </th>
                <th>Email </th>
                <th>Order date</th>
                <th>Status</th>
                <th style="width: 100px">&nbsp</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($customers as $key => $customer)          
            
                <tr>
                    <td>{{ $customer->id }}</td>
                    <td>{{ $customer->name }}</td>
                    <td>{{ $customer->phone }}</td>
                    <td>{{ $customer->email }}</td>
                    <td>{{ $customer->created_at }}</td>
                    <td>
                        @if ($customer->status == 0)
                            <strong style="color: blue">                                
                                Pending
                            </strong>
                        @elseif($customer->status == 1)
                            <strong style="color: green">                                
                                Confirmed
                            </strong>                   
                        @elseif($customer->status == 2)
                            <strong style="color: orangered">                                
                                Cancel
                            </strong>                   
                        @endif  
                    </td>
                    <td>
                        <a class="btn btn-primary btn-sm" href="/admin/customers/view/{{ $customer->id }}" >
                            <i class="fa-solid fa-eye"> </i> 
                            
                        </a>
                        <a class="btn btn-danger btn-sm" href ="/admin/customers/edit/{{ $customer->id }}" >
                            <i class="fa-solid fa-pen-to-square"></i>
                        </a>
                        
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
{!! $customers->links() !!}
@endsection
