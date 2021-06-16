<div>
    <div>
        <div class=" d-flex"><svg width="40" height="40" viewBox="0 0 67 67" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M33.5002 0.583252C15.3302 0.583252 0.583496 15.3299 0.583496 33.4999C0.583496 51.6699 15.3302 66.4166 33.5002 66.4166C51.6702 66.4166 66.4168 51.6699 66.4168 33.4999C66.4168 15.3299 51.6702 0.583252 33.5002 0.583252ZM38.1414 53.5462V59.8333H29.3527V53.4803C23.7239 52.2953 18.951 48.6745 18.5889 42.2887H25.0406C25.3697 45.7449 27.7397 48.4441 33.7635 48.4441C40.2152 48.4441 41.6635 45.2183 41.6635 43.2103C41.6635 40.4783 40.2152 37.9108 32.8747 36.1662C24.7114 34.1912 19.1156 30.8337 19.1156 24.0858C19.1156 18.4241 23.691 14.7374 29.3527 13.5195V7.16659H38.1414V13.5853C44.2639 15.0666 47.3252 19.7078 47.5227 24.7441H41.071C40.9064 21.0903 38.9643 18.5887 33.7635 18.5887C28.826 18.5887 25.8635 20.827 25.8635 23.987C25.8635 26.752 28.0031 28.5624 34.6522 30.2741C41.3014 31.9858 48.4114 34.8495 48.4114 43.1445C48.3785 49.1683 43.8689 52.4599 38.1414 53.5462Z" fill="black" />
            </svg>
            <h1 class="fs-30 mt-2 ms-3 fw-bold">

                Payment Method </h1>
        </div>

        <div class="my-5">
            <div class="row d-flex justify-content-around align-items-center payment">
                <div class="col-4 form-check">
                    <input class="form-check-input" type='radio' value='cash' name='payment_method' required id='cash'>
                    <label onclick="activeClassPayment(`cash`)" class="form-check-label w-100 fs-30 text-center  p-2 border border-dark cash pointer" for='cash' style="border-radius: 15px;">Cash</label>
                </div>
                <!-- <div class="col-4 form-check">
                    <input class=" form-check-input" type='radio' value='bank' name='payment_method' required id='bank'>
                    <label onclick="activeClassPayment(`bank`)" class="form-check-label w-100 fs-30 text-center   p-2 border border-dark bank pointer" style="border-radius: 15px;" for='bank'>Bank</label>
                </div> -->
            </div>
        </div>
        <div class="my-5 container">
            <div class="mb-5">
                <h1 class="text-center fs-30 fw-bold">Details</h1>
            </div>
            <div class="mx-auto" style="background: #F7F7F7; border-radius: 28px; ">
                @php
                $service_data = App\Models\Service::find($service_id);
                $cleaner_data = App\Models\Cleaner::find($cleaner_id);
                @endphp
                <div class="p-5">
                    <div class="d-flex justify-content-between border-bottom border-dark my-4">
                        <span class="fs-20 ms-4">{{ ucwords($service_data->name) }}</span> <span class="fs-20 me-4">{{ number_format($service_data->fee, 0, ",", ".") }}</span>
                    </div>
                    <div class="d-flex justify-content-between border-bottom border-dark my-4">
                        <span class="fs-20 ms-4">Cleaner Fee</span> <span class="fs-20 me-4">{{ number_format($cleaner_data->fee, 0, ",", ".") }}</span>
                    </div>
                    <div class="d-flex justify-content-between border-bottom border-dark my-4">
                        <span class="fs-20 ms-4">Cleaner Tools</span> <span class="fs-20 me-4">{{ number_format($service_data->tools, 0, ",", ".") }}</span>
                    </div>
                    <div class="d-flex justify-content-between my-4">
                        <span class="fs-20 ms-4">Total</span> <span class="fs-20 me-4">{{ number_format($service_data->fee + $cleaner_data->fee + $service_data->tools, 0, ",", ".") }}</span>
                    </div>
                    <div class="d-flex justify-content-center">
                        <button class="btn w-100 fs-30 py-2" type="submit" style="border-radius: 15px ;background: #00C46F; color:white;">Order</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>