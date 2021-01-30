$(() => {
    listar()
    $('#create').on('click', () => {
        create()
    })
})
let content = undefined;
function listar() {
    $.ajax({
        url: './api/agenda',
        type: 'get',
        success: function (res) {
            content = res
            console.log(content)
            $('table tbody').html('')
            content.forEach(uplist)
            function uplist(item, index) {


                console.log(item, index)
                $('table tbody').prepend(`<tr id=${item.id}>
                <td class="pt-3-half" contenteditable="true" name="nome">${item.nome}</td>
                <td class="pt-3-half" contenteditable="true" name="email">${item.email}</td>
                <td class="pt-3-half" contenteditable="true" name="telefone">${item.telefone}</td>
                <td class="pt-3-half d-none">
                    <span class="table-up"><a href="#!" class="indigo-text"><i
                        class="fas fa-long-arrow-alt-up" aria-hidden="true"></i></a></span>
                    <span class="table-down"><a href="#!" class="indigo-text"><i
                        class="fas fa-long-arrow-alt-down" aria-hidden="true"></i></a></span>
                </td>
                <td>
                    <span class="table-remove">
                        <button type="button" data-ref=${item.id} class="btn btn-success btn-rounded btn-sm my-0 save" onclick='update(this)' >Salvar</button>
                    </span>
                </td>
                <td>
                    <span class="table-remove">
                        <button type="button" data-ref=${item.id} class="btn btn-danger btn-rounded btn-sm my-0 remove" onclick='remove(this)'>Remover</button>
                    </span>
                </td>
            </tr>` )
            }
        }
    })

}

function create() {
    $.ajax({
        url: `api/agenda?nome=nome&email=email&telefone=telefone`,
        type: 'post',
        success: function (res) {
            console.log(res)
            listar()
        }
    })
}



function update(data) {
    
    let id = $(data).attr('data-ref');
    let nome = $('tr#' + id + ' td[name="nome"]').text();
    let email = $('tr#' + id + ' td[name="email"]').text();
    let telefone = $('tr#' + id + ' td[name="telefone"]').text();

    $.ajax({
        url: `api/agenda/${id}?nome=${nome}&email=${email}&telefone=${telefone}`,
        type: 'put',
        success: function (res) {
           
            console.log(res)
            listar()
            alert('Salvo com sucesso!')
        }
    })
}

function remove(data){
    let id = $(data).attr('data-ref');
   
    $.ajax({
        url: `api/agenda/${id}`,
        type: 'delete',
        success: function (res) {           
            console.log(res)
            listar()
            alert('Item excluido')
        }
    })
}



