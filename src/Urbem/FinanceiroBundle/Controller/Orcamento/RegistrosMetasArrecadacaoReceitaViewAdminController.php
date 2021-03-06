<?php

namespace Urbem\FinanceiroBundle\Controller\Orcamento;

use Sonata\AdminBundle\Controller\CRUDController as Controller;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class RegistrosMetasArrecadacaoReceitaViewAdminController extends Controller
{
    const ROUTE = 'urbem_financeiro_orcamento_registro_metas_arrecadacao_receita';

    /**
     * @param null $id
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|\Symfony\Component\HttpFoundation\Response
     */
    public function editAction($id = null)
    {
        try {
            return parent::editAction($id); // TODO: Change the autogenerated stub
        } catch (NotFoundHttpException $e) {
            $this->addFlash('error', $this->get('translator')->transChoice('label.registrosMetasArrecadacaoReceitaView.message.metaArrecadacaoReceitaNaoExiste', 0, [], 'messages'));
            return $this->redirectToRoute(sprintf('%s_%s', self::ROUTE, 'create'));
        }
    }
}
