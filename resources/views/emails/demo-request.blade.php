@component('mail::message')
# New Demo Request

**Name:** {{ $demo->name }}  
**Email:** {{ $demo->email }}  
**Company:** {{ $demo->company }}  
**Phone:** {{ $demo->phone ?: '—' }}  

**Message:**  
{{ $demo->message ?: '—' }}

**Source:** {{ $demo->source_page ?: '—' }}  
**UTM:** {{ $demo->utm_source ?: '—' }} / {{ $demo->utm_medium ?: '—' }} / {{ $demo->utm_campaign ?: '—' }}

Thanks,  
NLT Website
@endcomponent
