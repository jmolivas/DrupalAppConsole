<?php

namespace Drupal\AppConsole\Command;

class GeneratorFormConfirmCommand extends GeneratorFormCommand {

  protected function configure()
  {
    parent::configure('ConfirmFormBase', 'generate:form:confirm');
  }
}