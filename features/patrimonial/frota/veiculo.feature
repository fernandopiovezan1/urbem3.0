# features/patrimonial/frota/veiculo.feature
Feature: Homepage Patrimonial>Frota>Veiculo
  In order to Homepage Patrimonial>Frota>Veiculo
  I would be able to access the urbem

  Scenario: Access to the main page of Veiculo
    Given I am authenticated as "suporte" with "123"
    Given I am on "/patrimonial/frota/veiculo/list"
    Then I should see text matching "IJJ9373"

  Scenario: Create a new Veiculo with fail
    Given I am authenticated as "suporte" with "123"
    Given I am on "/patrimonial/frota/veiculo/create"
    And I press "btn_create_and_list"
    Then I should not see text matching "criado com sucesso"

  Scenario: Create a new Veiculo with success
    Given I am authenticated as "suporte" with "123"
    Given I am on "/patrimonial/frota/veiculo/create"
    And I fill field with uniqueId as "codMarca" with "VolksWagem" when field is "select"
    And I fill field with uniqueId as "codModelo" with "Motoniveladora 165 S" when field is "select"
    And I fill field with uniqueId as "codTipoVeiculo" with "Passeio" when field is "select"
    And I fill field with uniqueId as "codCombustivel" with "Diesel" when field is "select"
    And I fill field with uniqueId as "placa" with "xyz1234" when field is "input"
    And I fill field with uniqueId as "prefixo" with "abc" when field is "input"
    And I fill field with uniqueId as "chassi" with "9BG116GW04C400001" when field is "input"
    And I fill field with uniqueId as "kmInicial" with "5000" when field is "input"
    And I fill field with uniqueId as "numCertificado" with "73865132920" when field is "input"
    And I fill field with uniqueId as "anoFabricacao" with "2014" when field is "input"
    And I fill field with uniqueId as "anoModelo" with "2015" when field is "input"
    And I fill field with uniqueId as "categoria" with "Oficial" when field is "input"
    And I fill field with uniqueId as "capacidade" with "4" when field is "input"
    And I fill field with uniqueId as "potencia" with "1.50T" when field is "input"
    And I fill field with uniqueId as "cilindrada" with "061C" when field is "input"
    And I fill field with uniqueId as "numPassageiro" with "2" when field is "input"
    And I fill field with uniqueId as "capacidadeTanque" with "50" when field is "input"
    And I fill field with uniqueId as "cor" with "Azul" when field is "input"
    And I fill field with uniqueId as "dtAquisicao" with "01/01/2016" when field is "input"
    And I fill field with uniqueId as "codCategoria" with "AB" when field is "select"
    And I fill field with uniqueId as "verificado" with "checkField" when field is "checkbox"
    And I press "btn_create_and_list"
    Then I should see "criado com sucesso"

  Scenario: Edit a Veiculo with failure
    Given I am authenticated as "suporte" with "123"
    Given I am on "/patrimonial/frota/veiculo/list"
    And I fill in "filter_placa_value" with "xyz1234"
    And I press "search"
    And I follow "Perfil"
    And I follow "edit"
    And I fill field with uniqueId as "capacidadeTanque" with "abc" when field is "input"
    And I press "Salvar"
    Then I should not see "O item foi atualizado com sucesso"

  Scenario: Edit a Veiculo with success
    Given I am authenticated as "suporte" with "123"
    Given I am on "/patrimonial/frota/veiculo/list"
    And I fill in "filter_placa_value" with "xyz1234"
    And I press "search"
    And I follow "Perfil"
    And I follow "edit"
    And I fill field with uniqueId as "codMarca" with "Ford" when field is "select"
    And I fill field with uniqueId as "codModelo" with "Kombi" when field is "select"
    And I fill field with uniqueId as "codTipoVeiculo" with "Carga" when field is "select"
    And I fill field with uniqueId as "codCombustivel" with "ALCOOL" when field is "select"
    And I fill field with uniqueId as "placa" with "xpt4321" when field is "input"
    And I fill field with uniqueId as "prefixo" with "def" when field is "input"
    And I fill field with uniqueId as "chassi" with "8CH228HY16E599998" when field is "input"
    And I fill field with uniqueId as "kmInicial" with "6000" when field is "input"
    And I fill field with uniqueId as "numCertificado" with "456789123" when field is "input"
    And I fill field with uniqueId as "anoFabricacao" with "2015" when field is "input"
    And I fill field with uniqueId as "anoModelo" with "2016" when field is "input"
    And I fill field with uniqueId as "categoria" with "Passeio" when field is "input"
    And I fill field with uniqueId as "capacidade" with "8" when field is "input"
    And I fill field with uniqueId as "potencia" with "1.0" when field is "input"
    And I fill field with uniqueId as "cilindrada" with "081C" when field is "input"
    And I fill field with uniqueId as "numPassageiro" with "6" when field is "input"
    And I fill field with uniqueId as "capacidadeTanque" with "80" when field is "input"
    And I fill field with uniqueId as "cor" with "Verde" when field is "input"
    And I fill field with uniqueId as "dtAquisicao" with "01/06/2016" when field is "input"
    And I fill field with uniqueId as "codCategoria" with "AD" when field is "select"
    And I fill field with uniqueId as "verificado" with "uncheckField" when field is "checkbox"
    And I press "Salvar"
    Then I should see "O item foi atualizado com sucesso"

  Scenario: Delete a Assentamento with success
    Given I am authenticated as "suporte" with "123"
    Given I am on "/patrimonial/frota/veiculo/list"
    And I search by "xpt4321" in "filter_placa_value" and follow to "delete"
    And I press "Sim, remover"
    Then I should see "O item foi removido com sucesso"
