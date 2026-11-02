<section class="catalog">
    <div class="catalog__heading">
        <div>
            <p class="catalog__eyebrow">Catálogo</p>
            <h1>Produtos</h1>
            <p class="catalog__intro">Confira os produtos disponíveis.</p>
        </div>
        <span class="catalog__count">{{ $products->count() }} {{ $products->count() === 1 ? 'produto' : 'produtos' }}</span>
    </div>

    @if ($products->isEmpty())
        <div class="catalog__empty">
            <h2>Nenhum produto cadastrado</h2>
            <p>Os produtos adicionados aparecerão aqui.</p>
        </div>
    @else
        <div class="product-table-wrapper">
            <table class="product-table">
                <thead>
                    <tr>
                        <th scope="col">Produto</th>
                        <th scope="col">Slug</th>
                        <th scope="col">Categoria</th>
                        <th scope="col">Descrição</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                        <tr wire:key="product-{{ $product->id }}">
                            <th scope="row">
                                <span class="product-table__name">{{ $product->name }}</span>
                                <span class="product-table__id">#{{ $product->id }}</span>
                            </th>
                            <td>{{ $product->slug }}</td>
                            <td>{{ $product->category?->name ?? 'Sem categoria' }}</td>
                            <td class="product-table__description">
                                {{ \Illuminate\Support\Str::limit(strip_tags($product->description), 180) }}
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @endif
</section>
