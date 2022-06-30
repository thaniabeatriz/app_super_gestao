<h3>Fornecedor</h3>

{{-- Fica o comentário que será descartado pelo interpretador do blade --}}

@php
    /*
    if(!<condicao>) {} // enquanto executa se o retorno for true
    */
@endphp

{{-- @unless exeucta se o retorno for false --}}

@isset($fornecedores)
        
        @forelse($fornecedores as $indice => $fornecedor)
                Iteração atual: {{ $loop->iteration}}
                <br>
                Fornecedor: {{ $fornecedor['nome']}}
                @php $fornecedor[$indice]['nome'] = 'Outro nome' @endphp
                <br>
                Status: {{ $fornecedor['status']}}
                <br>
                CNPJ: {{ $fornecedor['cnpj'] ?? 'Dado nao foi preenchido'}}
                <br>
                Telefone: ({{ $fornecedor['ddd'] ?? '' }}) {{ $fornecedor['telefone'] ?? ''}}
                <hr>
        @empty
                Não existem fornecedores cadastrados
        @endforelse
@endisset