@extends('layouts.main-app')

@section('styles')

@endsection

@section('content')
<style>
    .page-wrap {
      max-width: 1000px;
      margin: 20px auto;
      padding: 20px;
    }
    
    .article-header {
      text-align: center;
      @media (max-width: 520px) {
        h2 {
          font-size: 1.2rem;
        }
      }
    }
    
    .classification-header {
      text-transform: uppercase;
      color: red;
      letter-spacing: 0.1rem;
    }
    
    .intro-ps {
      columns: 2;
      margin: 0 0 2rem 0;
      > p:first-child {
        text-indent: 0;
        strong {
          font-size: 125%;
          letter-spacing: -1px;
          line-height: 0;
        }
      }
      @media (max-width: 520px) {
        columns: 1; 
      }
    }
    
    .in-brief {
      text-align: center;
      margin: 0 0 2rem 0;
      
    }
    .in-brief-content {
      columns: 3;
      font-size: 0.8rem;
      text-align: left;
      border: 1px solid #ccc;
      padding: 20px;
      @media (max-width: 520px) {
        columns: 2; 
      }
    }
    
    
    
    .article-header {
      padding: 0 50px;
      margin: 0 0 30px 0;
    }
    .byline {
      font-style: italic;
    }
    .article-body {
      font-size: 0.9rem;
      max-width: 500px;
      margin: 0 auto;
    
    }
    
    figure {
      margin: 1rem 0;
      figcaption {
        font-weight: bold;
        letter-spacing: -0.03rem;
      }
      img {
        margin: 0 0 5px 0;
      }
    }
    img {
      max-width: 100%;
      display: block;
    }</style>
<div class="page-wrap">
  
    <article>
      
      <header class="article-header">  
        
        <h4 class="classification-header">
           الأخبار
        </h4>
        
        <svg viewBox="0 0 560 259" class="header-lockup">
          <text transform="matrix(1 0 0 1 -0.00007 116.14385)"><tspan x="0" y="0" font-family="'Montserrat'" font-size="157px">المستجدات</tspan></text>
          <circle fill="#FFFFFF" cx="128.50781" cy="126.5" r="34.5"/>
          <text transform="matrix(1 0 0 1 114.62256 123)">
            <tspan x="0" y="0" font-family="'Montserrat'" font-size="19px">اليوم</tspan>
          </text>
        </svg>
        
        <h2>
        {{$posts->title}}
        </h2>
        <hr>
        <div style="text-align: left" class="byline">
        {{$posts->created_at->todatestring()}}  : نشر في 
        </div>
        
      </header>
      
   
      
      <div style="text-align: right" class="article-body">
        
        <p >{!! html_entity_decode($posts->description) !!} </p>
    </div>
      
    </article>
    
  </div>

@endsection