<div id="reg-modal" class="content-modal">
                        <div class="body-modal">
                            <div class="header-modal">
                                <span id="close-modal-btn" class="close-modal">&times;</span>
                                <h2>Registrate En Busco Tu Negocio</h2>
                            </div>

                            <form name="reg-form" class="reg-form" method="POST" action="database.php">
                                <table class="reg-table">
                                    <tr>
                                        <td>
                                            <label>Correo Electronico</label>
                                        </td>
                                        <td>
                                            <input class="reg-data" type="email" name="txtEmail" placeholder="Ejemplo@gmail.com" maxlength="50" required>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label>Nombre</label>
                                        </td>
                                        <td>
                                            <input class="reg-data" type="text" name="txtNombre" maxlength="55" required>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label>Apellido</label>
                                        </td>
                                        <td>
                                            <input class="reg-data" type="text" name="txtApellido" maxlength="55" required>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label>Telefono Movil</label>
                                        </td>
                                        <td>
                                            <input class="reg-data" type="text" name="txtFono" maxlength="9" required>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label>Comuna</label>
                                        </td>
                                        <td>
                                            <select class="form-control" name="cboComuna">
                                            <option value="">Seleccione</option>
                                                <option value="1">Cerrillos</option>
                                                <option value="2">Cerro Navia</option>
                                                <option value="3">Conchalí</option>
                                                <option value="4">El Bosque</option>
                                                <option value="5">Estacion Central</option>
                                                <option value="6">Huechuraba</option>
                                                <option value="7">Independencia</option>
                                                <option value="8">La Cisterna</option>
                                                <option value="9">La Florida</option>
                                                <option value="10">La Granja</option>
                                                <option value="11">La Pintana</option>
                                                <option value="12">La Reina</option>
                                                <option value="13">Las Condes</option>
                                                <option value="14">Lo Barnechea</option>
                                                <option value="15">Lo Espejo</option>
                                                <option value="16">Lo Prado</option>
                                                <option value="17">Macúl</option>
                                                <option value="18">Maipú</option>
                                                <option value="19">Pedro Aguirres Cerda</option>
                                                <option value="20">Peñalolen</option>
                                                <option value="21">Providencia</option>
                                                <option value="22">Pudahuel</option>
                                                <option value="23">Puente Alto</option>
                                                <option value="24">Quilicura</option>
                                                <option value="25">Quinta Normal</option>
                                                <option value="26">Recoleta</option>
                                                <option value="27">Renca</option>
                                                <option value="28">San Joaquín</option>
                                                <option value="29">San Miguel</option>
                                                <option value="30">San Ramón</option>
                                                <option value="31">Santiago</option>
                                                <option value="32">Vitacura</option>
                                                <option value="33">Ñuñoa</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label>Contraseña</label>
                                        </td>
                                        <td>
                                            <input class="reg-data" type="password" name="txtPassword" maxlength="15" required>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            <div>
                                                <!-- <button id="reg-done" type="button" class="btn btn-success btn-lg" name="save-reg" href="database.php">Registrarse</button> -->
                                                <input type="submit" value="Registrarse" onclick=(closeModal())>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </form>
                        </div>
</div>