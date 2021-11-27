@if ($message = Session::get('success'))
<p>Data successfully saved. <a href="/login">click here</a> to login</p>
@endif

@if ($message = Session::get('error'))
<p>Data not saved.</p>
@endif


@if ($message = Session::get('logged'))
<p>logged</p>
@endif

@if ($message = Session::get('not_logged'))
<p>Not logged</p>
@endif


@if ($message = Session::get('saved'))
<p>Product Saved</p>
@endif

@if ($message = Session::get('not_saved'))
<p>Product not Saved</p>
@endif