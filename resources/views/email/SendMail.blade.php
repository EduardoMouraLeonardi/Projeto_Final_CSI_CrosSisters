<x-mail::message>

Para: {{ $email->para }}<br>
Assunto: {{ $email->assunto }}<br>
Conteúdo: {{ $email->conteudo }}<br>


Obrigado,<br>
{{ config('app.name') }}
</x-mail::message>
