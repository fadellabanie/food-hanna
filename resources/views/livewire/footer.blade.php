<div>
    <section class="contact p-5">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-12">
                    <div class="d-flex text-white">
                        <img src="{{ asset('application/assets/dist/images/logo-light.svg') }}" alt="">
                    </div>
                    <div class="d-flex mt-3">
                        <div class="text-success flex-shrink-0">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                                <path
                                    d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z" />
                            </svg>
                        </div>
                        <p class="flex-grow-1 ms-3 text-white">{{$settings->address}}</p>
                    </div>
                    <div class="d-flex">
                        <div class="text-success flex-shrink-0">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-telephone-fill" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
                            </svg>
                        </div>
                        <p class="flex-grow-1 ms-3 text-white">(mobile) {{$settings->mobile}}</p>
                    </div>
                    <div class="d-flex">
                        <div class="text-success flex-shrink-0">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-telephone-fill" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
                            </svg>
                        </div>
                        <p class="flex-grow-1 ms-3 text-white">(office) {{$settings->office}}</p>
                    </div>
                    <div class="d-flex">
                        <div class="text-success flex-shrink-0">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-envelope-fill" viewBox="0 0 16 16">
                                <path
                                    d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555zM0 4.697v7.104l5.803-3.558L0 4.697zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757zm3.436-.586L16 11.801V4.697l-5.803 3.546z" />
                            </svg>
                        </div>
                        <p class="flex-grow-1 ms-3 text-white"> {{$settings->email}}</p>
                    </div>
                </div>
                <div class="col-md-8 col-12">
                    <div class="row">
                        <div class="col">
                            <p class="text-white">Neem contact met ons op</p>

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-12">

                            <x-input type="text" wire:model="title" field='title' placeholder="{{__('Title')}}"
                                class="form-control mb-2" />
                            <x-input type="email" wire:model="email" field='email' placeholder="{{__('Email')}}"
                                class="form-control mb-2" />

                            <x-input type="text" wire:model="subject" field='subject' placeholder="{{__('Onderwerp')}}"
                                class="form-control mb-2" />
                        </div>
                        <div class="col-md-6 col-12">
                            <x-textarea wire:model.defer="body" field='body'></x-textarea>
                        </div>
                    </div>

                    <div class="d-grid d-md-flex justify-content-md-end">
                        <button class="btn btn-success mt-3 px-5" type="button" wire:click.prevent="send"
                            wire:loading.attr="disabled"
                            wire:loading.class="spinner spinner-white spinner-left">{{__("Verzend")}}</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>