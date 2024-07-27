<div>
    <span wire:click="switchShow"> Pulsante</span>
    <table class="table border mt-2">
        @if ($isShow)
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Immagine</th>
                    <th scope="col">Titolo</th>
                    <th scope="col"></th>
                </tr>
            </thead>
        @endif
        <tbody>
            @foreach ($products as $product)
                <tr>
                    <th scope="row">#{{ $product->id }}</th>

                    <td>{{ $product->name }}</td>
                    <td>
                        -
                    </td>
                </tr>
            @endforeach

        </tbody>
    </table>
    {{ $products->links() }}
</div>
