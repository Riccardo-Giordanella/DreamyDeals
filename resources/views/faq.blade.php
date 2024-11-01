<x-layout>
    <header class="text-center">
        <h1 class="display-4 my-5">FAQ</h1>
    </header>
    <main class="container">
        <div class="accordion mb-5" id="accordionExample">
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed backgrounddark textred" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                        {{__("ui.account")}}
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body backgrounddark textwhite">
                        {{__("ui.accountDesc")}}
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed backgrounddark textred" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        {{__("ui.pay")}}
                    </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body backgrounddark textwhite">
                        {{__("ui.payDesc")}}
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed backgrounddark textred" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        {{__("ui.track")}}
                    </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body backgrounddark textwhite">
                        {{__("ui.trackDesc")}}
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed backgrounddark textred" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                        {{__("ui.delivery")}}
                    </button>
                </h2>
                <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body backgrounddark textwhite">
                        {{__("ui.deliveryDesc")}}
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed backgrounddark textred" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                        {{__("ui.refund")}}
                    </button>
                </h2>
                <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body backgrounddark textwhite">
                        {{__("ui.refundDesc")}}
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed backgrounddark textred" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                        {{__("ui.discount")}}
                    </button>
                </h2>
                <div id="collapseSix" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body backgrounddark textwhite">
                        {{__("ui.discountDesc")}}
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed backgrounddark textred" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                        {{__("ui.edit")}}
                    </button>
                </h2>
                <div id="collapseSeven" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body backgrounddark textwhite">
                        {{__("ui.editDesc")}}
                    </div>
                </div>
            </div>
        </div>
    </main>
</x-layout>