<link rel="stylesheet" href="css/search.css">
<link rel="stylesheet" href="css/form.css">
<form action="{{ route('search')}}" method="GET" class="search-form">
    <i class="fa fa-search search-icon"></i>
    <input type="text" name="query" id="query" value="{{ request()->input('query') }}" class="search-box" placeholder="Rechercher un produit" required>
</form>
