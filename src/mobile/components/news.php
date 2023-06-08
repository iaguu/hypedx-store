<style>
.form-role{
  display: flex;
  justify-content: center;
  align-items: center;
  text-align: center;
  margin: 0 auto;
  margin-bottom: 80px;
  margin-top: 80px;
}
.form {
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  align-self: center;
  background: #606c88;
  background: -webkit-linear-gradient(to right, #3f4c6b, #606c88);
  background: linear-gradient(to right, #3f4c6b, #606c88);
  padding: 30px;
  border-radius: 10px;
  max-width: 550px;
}

.title {
  font-size: 2rem;
  line-height: 2rem;
  font-weight: 700;
  letter-spacing: -0.025em;
  color: #fff;
}

.description {
  line-height: 1.5rem;
  font-size: 1rem;
  margin-top: 1rem;
  color: rgb(209 213 219);
}

.form div {
  display: flex;
  max-width: 38rem;
  margin-top: 1rem;
  column-gap: 0.5rem;
}

.form div input {
  outline: none;
  line-height: 1.5rem;
  font-size: 0.875rem;
  color: rgb(255 255 255 );
  padding: 0.5rem 0.875rem;
  background-color: rgb(255 255 255 / 0.05);
  border: 1px solid rgba(253, 253, 253, 0.363);
  border-radius: 0.375rem;
  flex: 1 1 auto;
  width: 80%;
}

.form div input::placeholder {
  color: rgb(216, 212, 212);
}

.form div input:focus {
  border: 1px solid rgb(99 102 241);
}

.form div button {
  cursor: pointer;
  color: #fff;
  font-weight: 600;
  font-size: 0.875rem;
  line-height: 1.25rem;
  padding: 0.625rem 0.875rem;
  background-color: rgb(99 102 241);
  border-radius: 0.375rem;
  border: none;
  outline: none;
  transition-duration: 0.4s;
}
.form div button:hover {
  opacity: 0.7;
}

</style>
<div class="form-role">
<form class="form">
  <span class="title">Se inscreva em nossa Newsletter.</span>
  <p class="description">Receba em primeira mão todas as novidades/lançamentos e nossas promoções mais congelantes. Vai ficar de fora dessa?</p>
  <div>
    <input placeholder="Digite o seu melhor e-mail" type="email" name="email" id="email-address">
    <button type="submit">Inscrever</button>
  </div>
</form>
</div>