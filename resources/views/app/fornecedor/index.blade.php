<h3>Fornecedor</h3>

{{-- Fica o comentário que será descartado pelo interpretador do blade --}}

@php
    /*
    if(!<condicao>) {} // enquanto executa se o retorno for true
    */
@endphp

{{-- @unless exeucta se o retorno for false --}}

Fornecedor: {{ $fornecedores[0]['nome']}}
<br>
Status: {{ $fornecedores[0]['status']}}
<br>
@if( !($fornecedores[0]['status'] == 'S') )
        Fornecedor inativo
@endif
<br>
@unless($fornecedores[0]['status'] == 'S') <!-- se o retorno for false -->
        Fornecedor inativoooo
@endunless
<br>