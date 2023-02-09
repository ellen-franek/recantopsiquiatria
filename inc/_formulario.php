<div class="form-mod">
    <div class="form-wrapper">
        <h2 class="title-section">Nós ligamos para você</h2>
        <form id="conversion-form" novalidate="novalidate" action="enviar.php" method="POST" data-typed-fields="1" data-lang="pt-BR">
            <label for="name-contact">Nome</label>
            <input type="text" placeholder="Nome*" name="name-contact" required>
            <label for="email-contact">E-mail</label>
            <input type="email" placeholder="Email*" name="email-contact" required>
            <label for="phone-contact">Telefone</label>
            <input type="text" placeholder="Telefone*" name="phone-contact" required>

            <label for="select-especialidade">Especialidade</label>
            <select name="select-especialidades" id="select-especialidade" required>
                <option value="especialidade">Especialidade</option>
                <option value="dependencia quimica">Dependência química</option>
                <option value="psiquiatria">Psiquiatria</option>
            </select>

            <button id="submit" type="submit">Enviar Informações</button>
        </form>
    </div>
</div>