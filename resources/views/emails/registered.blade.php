Bedankt voor uw registratie {{ $registration->fname }}!
@if ($registration->team != null)
	Uw team heeft invite token {{ $registration->team->token }}
@endif