from django.shortcuts import render_to_response
from django.template import RequestContext

def index(request):
	return render_to_response('index.html',RequestContext(request))

def userpage(request):
	return render_to_response('userpage.html',RequestContext(request))