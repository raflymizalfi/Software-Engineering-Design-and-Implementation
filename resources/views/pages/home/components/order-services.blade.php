<div>
    <form action="/order" method="get" class="container bg-white border border-dark p-4 position-relative order-services" @csrf <style="border-radius: 30px; box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.25); padding-bottom : 3em !important; padding-right: 3em !important;padding-left: 3em !important">
        @include("layouts.components.orderServicesComponent")
        <div class="d-flex justify-content-end align-self-end ">
            <div class="position-absolute continue-button">
                <button type="submit" class="btn btn-succes text-white px-6 py-2 fs-30" style="background-color : #00C46F; border-radius : 14px">Continue Order
                    <svg width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1.91659 14.5833H19.6024L11.8758 22.31C11.2583 22.9275 11.2583 23.9408 11.8758 24.5583C12.4933 25.1758 13.4908 25.1758 14.1083 24.5583L24.5424 14.1241C25.1599 13.5066 25.1599 12.5091 24.5424 11.8916L14.1241 1.44164C13.5066 0.824141 12.5091 0.824141 11.8916 1.44164C11.2741 2.05914 11.2741 3.05664 11.8916 3.67414L19.6024 11.4166H1.91659C1.04575 11.4166 0.333252 12.1291 0.333252 13C0.333252 13.8708 1.04575 14.5833 1.91659 14.5833Z" fill="white" />
                    </svg>
                </button>
            </div>
        </div>
    </form>
</div>