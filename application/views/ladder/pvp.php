    <!--=== Breadcrumbs ===-->
    <div class="breadcrumbs">
        <div class="container">
            <h1 class="pull-left">O Ranking</h1>
            <ul class="pull-right breadcrumb">
                <li><a href="<?= base_url(); ?>">Home</a></li>
                <li><a>Comunidade</a></li>
                <li class="active">Ranking</li>
            </ul>
        </div>
    </div><!--/breadcrumbs-->
    <!--=== End Breadcrumbs ===-->

    <div class="container content"> 
        <div class="col-md-12">

            <div class="tab-v1">
                <ul class="nav nav-tabs">
                    <li><a href="<?= site_url('ladder/pvm'); ?>">PVM</a></li>
                    <li class="active"><a>PVP</a></li>
                    <?php if($this->config->item('ladder_guilds') == TRUE){ ?>
                    <li><a href="<?= site_url('ladder/guild'); ?>">Guildas</a></li>
                    <?php } ?>
                    <li><a href="<?= site_url('ladder/vote'); ?>">Votos</a></li>
                </ul>
            </div>

            <br/>
            <div class="panel panel-red margin-bottom-40">
                <div class="panel-heading">
                    <h3 class="panel-title">Ranking <b>PvP</b></h3>
                </div>
                <div class="panel-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th><center>#</center></th>
                                <th>Personagem</th>
                                <th>Classe</th>
                                <th>Level</th>
                                <th><center>Alinhamento</center></th>
                                <th>Honra</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($pvp as $pos => $player){ ?>
                                <?= color_line($pos + 1); ?>
                                <td><center><?= $pos +1 ; ?></center></td>
                                <td><a href="<?= site_url('page/character/'.get($player->Id)); ?>"><?= get($player->Name); ?></a></td>
                                <td><img src="<?= img_url('ladder/heads/'.get($player->Breed).'_'.get($player->Sex).'.png'); ?>" width=30 /></td>
                                <td><?= player_level(get($player->Experience), $this->LadderManager); ?></td>
                                <td><center><img src="<?= img_url('ladder/alignement/'.get($player->AlignmentSide).'.png'); ?>"></center></td>
                                <td><?= get($player->Honor); ?></td>
                            </tr>                    
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>