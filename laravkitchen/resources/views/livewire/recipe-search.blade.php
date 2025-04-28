<div>
    <input type="text" wire:model.live="searchTerm" class="form-control mb-4 w-50 mx-auto d-block" placeholder="Search recipes by name or type...">

    <div class="row">
        @forelse ($recipes as $recipe)
            <div class="col-md-4 mb-4">
                <div class="card bg-success">
                    <img src="{{ asset('images/' . $recipe->image) }}" class="card-img-top" alt="{{ $recipe->name }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $recipe->name }}</h5>
                        <p class="card-text">{{ $recipe->description }}</p>
                        <div class="text-center">
                            <a href="{{ url('/recipes/' . $recipe->rid) }}" class="btn bg-warning btn-primary">View Recipe</a>
                        </div>
                    </div>
                </div>
            </div>
        @empty
            <p class="text-center">No recipes found for "{{ $searchTerm }}"</p>
        @endforelse
    </div>

    <div class="d-flex justify-content-center mt-4">
        {{ $recipes->links() }}
    </div>
</div>
