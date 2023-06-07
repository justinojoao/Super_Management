you're welcome

@if (count($fornecedores)> 0 && count($fornecedores) < 10)
    <h3> There're some providers</h3>
@elseif(count($fornecedores)> 10 )
    <h3> There're a lot of providers</h3>
@else
    <h3>We don't have any providers yet</h3>
@endif

