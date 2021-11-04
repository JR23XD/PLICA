<div class="pt-4">
  <div style="float: right;">
    {!! $paginar->appends(Request::all())->links() !!}
  </div>
  {{ _('Mostrando desde') . ' ' . $paginar->firstItem() . ' ' . _('hasta') . ' ' . $paginar->lastItem() . ' ' . _('de') . ' ' . $paginar->total() . ' ' . _('registros') }}.
</div>
