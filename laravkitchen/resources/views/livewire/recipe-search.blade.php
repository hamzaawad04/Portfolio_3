<div>
<pre>SearchTerm: {{ $searchTerm }}</pre>
    <input type="text" wire:model="searchTerm" class="form-control mb-4 w-50 mx-auto d-block" placeholder="Search by name or type...">

    <div class="row">
        @forelse ($recipes as $recipe)
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="{{ asset('images/' . $recipe->image) }}" class="card-img-top" alt="{{ $recipe->name }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $recipe->name }}</h5>
                        <p class="card-text">{{ $recipe->description }}</p>
                        <a href="{{ url('/recipes/' . $recipe->rid) }}" class="btn btn-primary">View Recipe</a>
                    </div>
                </div>
            </div>
        @empty
            <p>No recipes found for "{{ $searchTerm }}"</p>
        @endforelse
    </div>
    <div class="d-flex justify-content-center mt-4">
        {{ $recipes->links() }}
    </div>
</div>
