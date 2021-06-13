@extends("layouts.app")

@section("content")
<form action="{{ url('order/booking') }}" method="post" class=" bg-white  p-4 position-relative my-5 mx-auto" style="border-radius: 30px; box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.25); padding-bottom : 3em !important; padding-right: 3em !important;padding-left: 3em !important; width:90%">
  @csrf
  <input type="hidden" name="location" value="bojongsoang" />
  <input type="hidden" name="service_id" value="1">

  @include("layouts.components.orderServicesComponent")
  @include("pages.order.components.cleaner")
  @include("pages.order.components.payment")
</form>
@endsection