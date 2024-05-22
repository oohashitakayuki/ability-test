@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')
<div class="contact-form__content">
  <div class="contact-form__heading">
    <h2>Contact</h2>
  </div>
  <form class="form" action="/contacts/confirm" method="post">
    @csrf
    <div class="form__group">
      <div class="form__group--title">
        <p class="form__label--item">お名前<span class="form__label--item">※</span></p>
      </div>
      <div class="form__group-content">
        <div class="form__input--text">
          <input type="text" name="last-name" placeholder="例: 山田" value="{{ old('last-name') }}"/>
          <input type="text" name="first-name" placeholder="例: 太郎" value="{{ old('first-name') }}"/>
        </div>
        <div class="form__error">
        </div>
      </div>
    </div>
    <div class="form__group">
      <div class="form__group--title">
        <p class="form__label--item">性別<span class="form__label--item">※</span></p>
      </div>
      <div class="form__group-content">
        <div class="form__input--text">
          <input type="radio" name="man" checked="checked" value="{{ old('man') }}"/>男
          <input type="radio" name="woman" value="{{ old('woman') }}"/>女
          <input type="radio" name="other" value="{{ old('other') }}"/>その他
        </div>
        <div class="form__error">
        </div>
      </div>
    </div>
    <div class="form__group">
      <div class="form__group--title">
        <p class="form__label--item">メールアドレス<span class="form__label--item">※</span></p>
      </div>
      <div class="form__group-content">
        <div class="form__input--text">
          <input type="email" name="email" placeholder="例: text@example.com" value="{{ old('email') }}"/>
        </div>
        <div class="form__error">
        </div>
      </div>
    </div>
    <div class="form__group">
      <div class="form__group--title">
        <p class="form__label--item">電話番号<span class="form__label--item">※</span></p>
      </div>
      <div class="form__group-content">
        <div class="form__input--text">
          <input type="text" name="tel" placeholder="080" value="{{ old('tel') }}"/>
          <span>-</span>
          <input type="text" name="tel" placeholder="1234" value="{{ old('tel') }}"/>
          <span>-</span>
          <input type="text" name="tel" placeholder="5678" value="{{ old('tel') }}"/>
        </div>
        <div class="form__error">
        </div>
      </div>
    </div>
    <div class="form__group">
      <div class="form__group--title">
        <p class="form__label--item">住所<span class="form__label--item">※</span></p>
      </div>
      <div class="form__group-content">
        <div class="form__input--text">
          <input type="text" name="address" placeholder="例: 東京都渋谷区千駄ヶ谷1-2-3" value="{{ old('address') }}"/>
        </div>
        <div class="form__error">
        </div>
      </div>
    </div>
    <div class="form__group">
      <div class="form__group--title">
        <p class="form__label--item">建物名</p>
      </div>
      <div class="form__group-content">
        <div class="form__input--text">
          <input type="text" name="building" placeholder="例: 千駄ヶ谷マンション101" value="{{ old('building') }}"/>
        </div>
        <div class="form__error">
        </div>
      </div>
    </div>
    <div class="form__group">
      <div class="form__group--title">
        <p class="form__label--item">お問い合わせの種類<span class="form__label--item">※</span></p>
      </div>
      <div class="form__group-content">
        <div class="form__input--text">
          <select name="category_id">
            <option disabled selected>選択してください</option>
            <option>商品のお届けについて</option>
            <option>商品の交換について</option>
            <option>商品トラブル</option>
            <option>ショップへのお問い合わせ</option>
            <option>その他</option>
          </select>
        </div>
        <div class="form__error">
        </div>
      </div>
    </div>
    <div class="form__group">
      <div class="form__group--title">
        <p class="form__label--item">お問い合わせ内容<span class="form__label--item">※</span></p>
      </div>
      <div class="form__group-content">
        <div class="form__input--text">
          <textarea name="detail" placeholder="お問い合わせ内容をご記載ください" value="{{ old('detail') }}"></textarea>
        </div>
        <div class="form__error">
        </div>
      </div>
    </div>
    <div class="form__button">
      <button class="form__button-submit" type="submit">確認画面</button>
    </div>
  </form>
</div>
@endsection