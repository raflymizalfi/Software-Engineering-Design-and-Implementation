<div>
    <div class=" bg-white  p-4 position-relative my-5 mx-auto" style="border-radius: 30px; box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.25); padding-bottom : 3em !important; padding-right: 3em !important;padding-left: 3em !important; width:90%">
        <div>
            <h1 class="fs-30 fw-bold mt-2" style="color: #00C46F;">On going order</h1>
        </div>

        @foreach($on_going_orders as $order)
        <div class="d-flex align-items-center my-3 px-5 py-4" style="border-radius: 19px; background: #F7F7F7;">

            <div>{!! $order->service->icon !!}</div>

            <div class="ms-3 align-bottom">
                <span class="fs-15 fw-bold">{{ ucwords($order->service->name) }}</span>
                <h6 class="fs-15">{{ date("D, d F Y", strtotime($order->date)) }}</h6>
            </div>
            <a href="{{ url('order-detail/'.$order->id) }}" class="float-right ms-auto"><svg width="30" height="30" viewBox="0 0 43 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M2.75951 23.7659H33.5832L20.1168 37.2634C19.0406 38.3421 19.0406 40.1123 20.1168 41.191C21.193 42.2697 22.9315 42.2697 24.0077 41.191L42.1928 22.9638C43.2691 21.8851 43.2691 20.1426 42.1928 19.0639L24.0353 0.809022C22.9591 -0.269674 21.2206 -0.269674 20.1444 0.809022C19.0682 1.88772 19.0682 3.63023 20.1444 4.70892L33.5832 18.2341H2.75951C1.24178 18.2341 0 19.4788 0 21C0 22.5212 1.24178 23.7659 2.75951 23.7659Z" fill="#00C46F" />
                </svg>
            </a>
        </div>
        @endforeach

        <hr>

        <div>
            <h1 class="fs-30 fw-bold mt-2">Order History</h1>
        </div>
        @foreach($history_orders as $order)
        <div class="d-flex align-items-center my-3 px-5 py-4" style="border-radius: 19px; background: #F7F7F7;">

            <div>{!! $order->service->icon !!}</div>

            <div class="ms-3 align-bottom">
                <span class="fs-15 fw-bold">{{ ucwords($order->service->name) }}</span>
                <h6 class="fs-15">{{ date("D, d F Y", strtotime($order->date)) }}</h6>
            </div>
            <a href="{{ url('order-detail/'.$order->id) }}" class="float-right ms-auto"><svg width="30" height="30" viewBox="0 0 43 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M2.75951 23.7659H33.5832L20.1168 37.2634C19.0406 38.3421 19.0406 40.1123 20.1168 41.191C21.193 42.2697 22.9315 42.2697 24.0077 41.191L42.1928 22.9638C43.2691 21.8851 43.2691 20.1426 42.1928 19.0639L24.0353 0.809022C22.9591 -0.269674 21.2206 -0.269674 20.1444 0.809022C19.0682 1.88772 19.0682 3.63023 20.1444 4.70892L33.5832 18.2341H2.75951C1.24178 18.2341 0 19.4788 0 21C0 22.5212 1.24178 23.7659 2.75951 23.7659Z" fill="#00C46F" />
                </svg>
            </a>
        </div>
        @endforeach
    </div>
</div>