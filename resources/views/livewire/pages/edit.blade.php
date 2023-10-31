<div>
    <div class="container-fluid">
        <div class="row vh-100 overflow-hidden">
            {{-- Section components --}}

            <section class="col-2 bg-white h-100">
                <div class="h4 fw-bold text-center" wire:click="showContentEdit('id', 'elemento')">
                    Componentes
                </div>

                <div class="mt-5">
                    @foreach ($allComponents as $component)
                        <button wire:click="preProcess('{{ $component->id }}')" class="btn btn-primary w-100 my-2">
                            Componente {{ $component->name }}
                        </button>
                    @endforeach
                </div>

            </section>
            {{-- Section content --}}

            <section class="col-8">
                <div class="h4 fw-bold text-center">
                    Preview
                </div>

                <div class="m-4 bg-white h-100">
                    <div class="bg-secondary-subtle border rounded-top-3 py-3 h-auto">
                        <div class="d-flex justify-content-center">
                            Index.html
                        </div>
                    </div>
                    <div class="h-100 border border-top-0 rounded-bottom-3 group-components">
                        <section>
                            @foreach ($components as $component)
                                {!! $component !!}
                            @endforeach
                        </section>
                    </div>
                </div>

            </section>

            {{-- Secton edit element --}}

            <section class="col-2 bg-white h-100">
                <div class="">
                    @if ($element)
                        <div class="h4 fw-bold">
                            {{ $element }}
                        </div>
                    @endif
                    @if ($content)
                        {{ $content }}
                    @endif
                </div>
            </section>
        </div>
    </div>

    <script>
        let groupComponents = document.querySelectorAll('.group-components *');

        groupComponents.forEach(function(element) {

            element.addEventListener('mouseover', function(event) {
                if (event.target.tagName != 'SECTION' && event.target
                    .tagName !=
                    'HEADER' && event.target.tagName != 'FOOTER' &&
                    event.target
                    .tagName != 'NAV' && event.target.tagName !=
                    'FORM' && event
                    .target.tagName != 'DIV') {
                    event.target.classList.add('border-selected');
                }
            });

            element.addEventListener('mouseout', function(event) {
                if (event.target.tagName != 'SECTION' && event.target
                    .tagName !=
                    'HEADER' && event.target.tagName != 'FOOTER' &&
                    event.target
                    .tagName != 'NAV' && event.target.tagName !=
                    'FORM' && event
                    .target.tagName != 'DIV') {
                    event.target.classList.remove('border-selected');
                }
            });

            element.addEventListener('click', function(event) {
                // mandar el valor del elemento
                Livewire.emit('showContentEdit', event.target.id, event.target.tagName, event.target.innerHTML);
                    console.log(event.target.id + ' ' + event.target.tagName + ' ' + event.target.innerHTML);
            });
        });



        document.addEventListener('livewire:load', function() {
            Livewire.on('addProperties', function(component) {
                let preComponent = component.component;

                // revisar que todos los elementos de preComponent tenga id y si no agregarle uno aleatorio
                preComponent = preComponent.replace(/(<\w+)(?![^>]*id="[^"]*")(.*?>)/g,
                    function(match, p1,
                        p2) {
                        return p1 + ' id="' + Math.random().toString(36).substr(2, 9) +
                            '"' + p2;
                    });

                Livewire.emit('addComponent', preComponent);
            });

            // Livewire.on('addActions', function() {
            //     alert('addActions');
            // });
        });
    </script>
</div>
